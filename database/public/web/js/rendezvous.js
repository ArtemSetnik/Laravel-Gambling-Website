"use strict";

(function(scope, root, $) {

	function RendezVousNode(_$node, _settings, _callback) {

		var self = this;

		var $node;

		var $input;

		var $popup;

		var $datepicker;

		var $navigation;

		var $calendar;

		var defaultI18n = {
			calendar: {
				month: {
					previous: 'Previous month',
					next:     'Next month',
					up:       'Select month'
				},
				year: {
					previous: 'Previous year',
					next:     'Next year',
					up:       'Select year'
				},
				decade: {
					previous: 'Previous decade',
					next:     'Next decade',
					up:       'Select day'
				}
			},
			days: {
				abbreviation: {
					monday:    'Mon',
					tuesday:   'Tue',
					wednesday: 'Wed',
					thursday:  'Thu',
					friday:    'Fri',
					saturday:  'Sat',
					sunday:    'Sun'
				},
				entire: {
					monday:    'Monday',
					tuesday:   'Tuesday',
					wednesday: 'Wednesday',
					thursday:  'Thursday',
					friday:    'Friday',
					saturday:  'Saturday',
					sunday:    'Sunday'
				}
			},
			months: {
				abbreviation:
				{
					january:   'Jan',
					february:  'Feb',
					march:     'Mar',
					april:     'Apr',
					may:       'May',
					june:      'Jun',
					july:      'Jul',
					august:    'Aug',
					september: 'Sep',
					october:   'Oct',
					november:  'Nov',
					december:  'Dec'
				},
				entire: {
					january:   'January',
					february:  'February',
					march:     'March',
					april:     'April',
					may:       'May',
					june:      'June',
					july:      'July',
					august:    'August',
					september: 'September',
					october:   'October',
					november:  'November',
					december:  'December'
				}
			}
		};

		var defaultTemplates = {
			container:
				'<div class="%prefix-input">'+
				'	%input'+
				'</div>'+
				''+
				'<div class="%prefix-popup">'+
				'	%datepicker'+
				'</div>',
			input: {
				default:
					'<input class="%prefix-input-date" type="text"%readonly name="paytime">',
				split:
					'<input class="%prefix-input-day" type="text"%readonly name="paytime">'+
					'%inputSeparator'+
					'<input class="%prefix-input-month" type="text"%readonly name="paytime">'+
					'%inputSeparator'+
					'<input class="%prefix-input-year" type="text"%readonly name="paytime">',
			},
			datepicker:
				'<div class="%prefix-datepicker">'+
				'	'+
				'	<nav class="%prefix-datepicker-navigation">'+
				'		'+ // Current Navigation is append here
				'	</nav>'+
				'	'+
				'	<section class="%prefix-datepicker-calendar">'+
				'		'+ // Current Calendar is append here
				'	</section>'+
				'	'+
				'</div>',
			navigation:
				'<button class="%prefix-datepicker-navigation-action %prefix-datepicker-navigation-previous" title="%scalePrevious">'+
				'	&laquo;'+
				'</button>'+
				'<button class="%prefix-datepicker-navigation-action %prefix-datepicker-navigation-up" title="%scaleUp">'+
				'	%scaleValue'+
				'</button>'+
				'<button class="%prefix-datepicker-navigation-action %prefix-datepicker-navigation-next" title="%scaleNext">'+
				'	&raquo;'+
				'</button>',
			calendar: {
				month:
					'<header class="%prefix-datepicker-calendar-header">'+
					'	<abbr class="%prefix-datepicker-calendar-title %prefix-datepicker-calendar-week-day" title="%mondayEntire">'+
					'		%mondayAbbreviation'+
					'	</abbr>'+
					'	<abbr class="%prefix-datepicker-calendar-title %prefix-datepicker-calendar-week-day" title="%tuesdayEntire">'+
					'		%tuesdayAbbreviation'+
					'	</abbr>'+
					'	<abbr class="%prefix-datepicker-calendar-title %prefix-datepicker-calendar-week-day" title="%wednesdayEntire">'+
					'		%wednesdayAbbreviation'+
					'	</abbr>'+
					'	<abbr class="%prefix-datepicker-calendar-title %prefix-datepicker-calendar-week-day" title="%thursdayEntire">'+
					'		%thursdayAbbreviation'+
					'	</abbr>'+
					'	<abbr class="%prefix-datepicker-calendar-title %prefix-datepicker-calendar-week-day" title="%fridayEntire">'+
					'		%fridayAbbreviation'+
					'	</abbr>'+
					'	<abbr class="%prefix-datepicker-calendar-title %prefix-datepicker-calendar-week-day" title="%saturdayEntire">'+
					'		%saturdayAbbreviation'+
					'	</abbr>'+
					'	<abbr class="%prefix-datepicker-calendar-title %prefix-datepicker-calendar-week-day" title="%sundayEntire">'+
					'		%sundayAbbreviation'+
					'	</abbr>'+
					'</header>'+
					''+
					'<div class="%prefix-datepicker-calendar-body">'+
					'	'+ // Current Values are append here
					'</div>',
				year:
					'<div class="%prefix-datepicker-calendar-body">'+
					'	'+ // Current Values are append here
					'</div>',
				decade:
					'<div class="%prefix-datepicker-calendar-body">'+
					'	'+ // Current Values are append here
					'</div>',
			},
			value: {
				default:
					'<button class="%prefix-datepicker-calendar-value %prefix-datepicker-calendar-%valueClass">'+
					'	%valueDisplay'+
					'</button>',
				selected:
					'<button class="%prefix-datepicker-calendar-selected-value %prefix-datepicker-calendar-%valueClass">'+
					'	%valueDisplay'+
					'</button>',
				dummy:
					'<span class="%prefix-datepicker-calendar-dummy-value %prefix-datepicker-calendar-%valueClass">'+
					'	%valueDisplay'+
					'</span>'
			}
		};

		var today = new Date();

		var settings = {
			canClose:               true,
			openByDefault:          false,
			splitInput:             false,
			inputReadOnly:          true,
			inputEmptyByDefault:    true,
			inputSeparator:         ' / ',
			firstDayOfTheWeek:      'monday',
			defaultScale:           'month',
			formats: {
				display: {
					day:            '%D',
					month:          '%Month',
					year:           '%Y',
					date:           '%D %Month %Y'
				},
				data: {
					day:            '%D',
					month:          '%M',
					year:           '%Y',
					date:           '%Y-%M-%D'
				}
			},
			prefixes: {
				class:              'rendezvous-',
				event:              'rendezvous-',
				data:               'rendezvous-',
			},
			defaultDate: {
				day:                today.getDate(),
				month:              today.getMonth(),
				year:               today.getFullYear()
			},
			i18n:                   defaultI18n,
			templates:              defaultTemplates,
			internationalWeekOrder: ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'],
			internationalYearOrder: ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december']
		};

		var popupIsVisible = false;

		var displayedDate = {};

		var currentDate = {};

		var calendars = {
			current:            'month',
			order:              ['month', 'year', 'decade'],
			scales: {
				month: {
					title:      '%Month %Y',
					values:     'day',
					min:        1,
					max:        function() {return lastDayOfTheMonth(displayedDate.month, displayedDate.year).getDate(); },
					dummy:      function() { var firstDay = firstDayOfTheMonth(displayedDate.month, displayedDate.year); return dummyDaysCount(firstDay); },
					format:     false,
					isSelected: function(day) { return displayedDate.year == currentDate.year && displayedDate.month == currentDate.month && day == currentDate.day; }
				},
				year: {
					title:      '%Y',
					values:     'month',
					min:        0,
					max:        11,
					dummy:      0,
					format:     function(value) { return i18nMonth(value); },
					isSelected: function(month) { return displayedDate.year == currentDate.year && month == currentDate.month; }
				},
				decade: {
					title:      '%X0 - %X9',
					values:     'year',
					min:        function() { return decade(displayedDate.year).start; },
					max:        function() { return decade(displayedDate.year).end; },
					dummy:      0,
					format:     false,
					isSelected: function(year) { return year == currentDate.year; }
				}
			}
		};

		var formatFunctions = {
			month: function(date) {
				return i18nMonth(date.getMonth()).toLowerCase();
			},
			Month: function(date) {
				return i18nMonth(date.getMonth());
			},
			mo: function(date) {
				return i18nMonthAbbreviation(date.getMonth()).toLowerCase();
			},
			Mo: function(date) {
				return i18nMonthAbbreviation(date.getMonth());
			},
			m: function(date) {
				return date.getMonth() + 1;
			},
			M: function(date) {
				return prefixWithZero(date.getMonth() + 1);
			},
			day: function(date) {
				return i18nDay(date.getDay()).toLowerCase();
			},
			Day: function(date) {
				return i18nDay(date.getDay());
			},
			da: function(date) {
				return i18nDayAbbreviation(date.getDay()).toLowerCase();
			},
			Da: function(date) {
				return i18nDayAbbreviation(date.getDay());
			},
			d: function(date) {
				return date.getDate();
			},
			D: function(date) {
				return prefixWithZero(date.getDate());
			},
			y: function(date) {
				var year = date.getFullYear().toString();
				return year.substr(year.length - 2);
			},
			Y: function(date) {
				return date.getFullYear();
			},
			x0: function(date) {
				var currentDecadeStart = decade(date.getFullYear()).start;
				return buildString('%y', new Date(currentDecadeStart, 1, 1));
			},
			X0: function(date) {
				var currentDecadeStart = decade(date.getFullYear()).start;
				return buildString('%Y', new Date(currentDecadeStart, 1, 1));
			},
			x9: function(date) {
				var currentDecadeEnd = decade(date.getFullYear()).end;
				return buildString('%y', new Date(currentDecadeEnd, 1, 1));
			},
			X9: function(date) {
				var currentDecadeEnd = decade(date.getFullYear()).end;
				return buildString('%Y', new Date(currentDecadeEnd, 1, 1));
			}
		};

		var recursiveMap = function(object, callback) {
			for(var property in object) {
				if(object.hasOwnProperty(property)) {
					if(typeof object[property] == 'object'){
						recursiveMap(object[property], callback);
					}
					else {
						object[property] = callback(object[property]);
					}
				}
			}
		}

		var prefixWithZero = function(value) {
			if(value < 10) {
				return '0'+value;
			}
			return value;
		}

		var i18nMonth = function(month) {
			var monthKey = settings.internationalYearOrder[month];
			return settings.i18n.months.entire[monthKey];
		}

		var i18nMonthAbbreviation = function(month) {
			var monthKey = settings.internationalYearOrder[month];
			return settings.i18n.months.abbreviation[monthKey];
		}

		var i18nDay = function(day) {
			var dayKey = settings.internationalWeekOrder[day];
			return settings.i18n.days.entire[dayKey];
		}

		var i18nDayAbbreviation = function(day) {
			var dayKey = settings.internationalWeekOrder[day];
			return settings.i18n.days.abbreviation[dayKey];
		}

		var firstDayOfTheMonth = function(month, year) {
			return new Date(year, month, 1);
		}

		var lastDayOfTheMonth = function(month, year) {
			return new Date(year, month + 1, 0);
		}

		var decade = function(year) {
			var decadeStart = Math.floor(year / 10) * 10;
			var decadeEnd = decadeStart + 9;
			return {start: decadeStart, end: decadeEnd};
		}

		var dummyDaysCount = function(date) {
			var dummyDaysCount = date.getDay() - settings.internationalWeekOrder.indexOf(settings.firstDayOfTheWeek);
			if(dummyDaysCount < 0) {
				dummyDaysCount += 7;
			}
			return dummyDaysCount;
		}

		var prefixEvent = function(event) {
			return settings.prefixes.event+event;
		}

		var prefixData = function(data) {
			return settings.prefixes.data+data;
		}

		var prefixClass = function(selector) {
			return settings.prefixes.class+selector;
		}

		var buildString = function(str, date) {
			while(str.indexOf('%') != -1) {
				var indexOfNextReplace = str.indexOf('%')
				for(var format in formatFunctions) {
					if(str.indexOf('%'+format) == indexOfNextReplace) {
						str = str.replace('%'+format, formatFunctions[format](date));
						break;
					}
				}
			}
			return str;
		}

		var buildValue = function(valueClass, valueDisplay, valueData, valueTemplate) {
			var value = settings.templates.value[valueTemplate]
				.replace('%valueClass', valueClass)
				.replace('%valueDisplay', valueDisplay);
			var $value = $(value);
			$value.data(prefixData('value'), valueData);
			return $value;
		}

		var buildValues = function() {
			var $valuesBody = $calendar.find('.'+prefixClass('datepicker-calendar-body'));
			var currentScale = calendars.scales[calendars.current];
			var valueClass = currentScale.values;
			var minLimit = 0
			var maxLimit = 0;
			var dummyValuesCount = 0;

			if(typeof currentScale.min == 'function') {
				minLimit = currentScale.min();
			}
			else if(typeof currentScale.min == 'number') {
				minLimit = currentScale.min;
			}

			if(typeof currentScale.max == 'function') {
				maxLimit = currentScale.max();
			}
			else if(typeof currentScale.min == 'number') {
				maxLimit = currentScale.max;
			}

			if(typeof currentScale.dummy == 'function') {
				dummyValuesCount = currentScale.dummy();
			}
			else if(typeof currentScale.dummy == 'number') {
				dummyValuesCount = currentScale.dummy;
			}

			// Builds dummy values
			for(var i = 0; i < dummyValuesCount; i++) {
				$valuesBody.append(
					buildValue(
						valueClass,
						'',
						'',
						'dummy'
					)
				);
			}

			// Builds each values
			for(var i = minLimit; i <= maxLimit; i++) {
				var valueDisplay = i;
				var valueData = i;

				if(typeof currentScale.format == 'function') {
					valueDisplay = currentScale.format(valueDisplay);
				}

				$valuesBody.append(
					buildValue(
						valueClass,
						valueDisplay,
						valueData,
						(currentScale.isSelected(i) ? 'selected' : 'default')
					)
				);
			}
		}

		var buildCalendar = function() {
			$calendar.html(settings.templates.calendar[calendars.current]);
			buildValues();
		}

		var buildNavigation = function() {
			var currentScale = calendars.scales[calendars.current];
			var scaleValue = '';

			// Builds navigation's title
			if(typeof currentScale.title == 'function') {
				scaleValue = currentScale.title();
			}
			else if(typeof currentScale.title == 'string') {
				scaleValue = buildString(currentScale.title, new Date(displayedDate.year, displayedDate.month, displayedDate.day));
			}

			var currentCalendarI18n = settings.i18n.calendar[calendars.current];
			var navigation = settings.templates.navigation
				.replace('%scalePrevious', currentCalendarI18n.previous)
				.replace('%scaleNext', currentCalendarI18n.next)
				.replace('%scaleUp', currentCalendarI18n.up)
				.replace('%scaleValue', scaleValue);
			$navigation.html(navigation);
		}

		var buildTemplate = function(template) {
			var prefixRegExp = new RegExp('%prefix-', 'g');
			var readOnlyRegExp = new RegExp('%readonly', 'g');
			var inputSeparatorRegExp = new RegExp('%inputSeparator', 'g');
			var readOnly = (settings.inputReadOnly ? ' readonly' : '');

			template = template
				.replace(prefixRegExp, prefixClass(''))
				.replace(readOnlyRegExp, readOnly)
				.replace(inputSeparatorRegExp, settings.inputSeparator);

			for(var i in settings.internationalWeekOrder) {
				var day = settings.internationalWeekOrder[i];
				var abbreviationRegExp = new RegExp('%'+day+'Abbreviation', 'g');
				var entireRegExp = new RegExp('%'+day+'Entire', 'g');
				template = template
					.replace(abbreviationRegExp, i18nDayAbbreviation(i))
					.replace(entireRegExp, i18nDay(i));
			}

			return template;
		}

		var completeSettings = function(customSettings) {
			// Complet DatePicker settings if needed
			if(typeof customSettings == 'object') {
				$.extend(true, settings, customSettings);
			}

			// Set DatePicker attributes
			$.extend(currentDate, settings.defaultDate);
			$.extend(displayedDate, settings.defaultDate);
			calendars.current = settings.defaultScale;

			// Build recursively all templates
			recursiveMap(settings.templates, buildTemplate);

			// Build container template
			var input = (settings.splitInput ? settings.templates.input.split : settings.templates.input.default);
			settings.templates.container = settings.templates.container
				.replace('%input', input)
				.replace('%datepicker', settings.templates.datepicker);
		}

		var updateInput = function() {
			// Input is set to the selected value in the datepicker (which is "displayedDate")
			$.extend(currentDate, displayedDate);

			var day = currentDate.day;
			var month = currentDate.month + 1;
			var year = currentDate.year;
			var date = new Date(year, month-1, day);
			var hasChange = false;

			if($node.data(prefixData('day')) != day) {
				hasChange = true;
				$input.find('.'+prefixClass('input-day')).val(buildString(settings.formats.display.day, date));
				$node.data(prefixData('day'), buildString(settings.formats.data.day, date));
			}

			if($node.data(prefixData('month')) != month) {
				hasChange = true;
				$input.find('.'+prefixClass('input-month')).val(buildString(settings.formats.display.month, date));
				$node.data(prefixData('month'), buildString(settings.formats.data.month, date));
			}

			if($node.data(prefixData('year')) != year) {
				hasChange = true;
				$input.find('.'+prefixClass('input-year')).val(buildString(settings.formats.display.year, date));
				$node.data(prefixData('year'), buildString(settings.formats.data.year, date));
			}

			if(hasChange) {
				$input.find('.'+prefixClass('input-date')).val(buildString(settings.formats.display.date, date));
				$node.data(prefixData('date'), buildString(settings.formats.data.date, date));
				triggerEvent('change');
			}
		}

		var setDay = function(day) {
			var lastDay = lastDayOfTheMonth(displayedDate.month, displayedDate.year).getDate();
			if(day < 1) {
				day = 1
			}
			else if(day > lastDay) {
				day = lastDay;
			}
			displayedDate.day = day;
		}

		var checkDayBounds = function() {
			setDay(displayedDate.day);
		}

		var previousDay = function() {
			displayedDate.day--;
			if(displayedDate.day == 0) {
				previousMonth();
				displayedDate.day = lastDayOfTheMonth(displayedDate.month, displayedDate.year).getDate();
			}
		}

		var nextDay = function() {
			displayedDate.day++;
			if(displayedDate.day > lastDayOfTheMonth(displayedDate.month, displayedDate.year).getDate()) {
				nextMonth();
				displayedDate.day = 1;
			}
		}

		var setMonth = function(month) {
			if(month < 0) {
				month = 0;
			}
			else if(month > 11) {
				month = 11;
			}
			displayedDate.month = month;
			checkDayBounds();
		}

		var previousMonth = function() {
			displayedDate.month--;
			if(displayedDate.month == -1) {
				previousYear();
				displayedDate.month = 11;
			}
			checkDayBounds();
		}

		var nextMonth = function() {
			displayedDate.month++;
			if(displayedDate.month == 12) {
				nextYear();
				displayedDate.month = 0;
			}
			checkDayBounds();
		}

		var setYear = function(year) {
			displayedDate.year = year;
			checkDayBounds();
		}

		var previousYear = function() {
			displayedDate.year--;
			checkDayBounds();
		}

		var nextYear = function() {
			displayedDate.year++;
			checkDayBounds();
		}

		var previousDecade = function() {
			displayedDate.year -= 10;
			checkDayBounds();
		}

		var nextDecade = function() {
			displayedDate.year += 10;
			checkDayBounds();
		}

		var onPrevious = function(event) {
			if(calendars.current == 'month') {
				previousMonth();
			}
			else if(calendars.current == 'year') {
				previousYear();
			}
			else if(calendars.current == 'decade') {
				previousDecade();
			}
			updateDatepicker();
		}

		var onNext = function(event) {
			if(calendars.current == 'month') {
				nextMonth();
			}
			else if(calendars.current == 'year') {
				nextYear();
			}
			else if(calendars.current == 'decade') {
				nextDecade();
			}
			updateDatepicker();
		}

		var updateDatepicker = function() {
			buildNavigation();
			buildCalendar();
		}

		var openDatepicker = function() {
			if(!popupIsVisible) {
				$popup.show();
				popupIsVisible = true;
				triggerEvent('open');
			}
		}

		var closeDatepicker = function(forceClosing) {
			if(settings.canClose || forceClosing) {
				if(popupIsVisible) {
					$popup.hide();
					popupIsVisible = false;
					triggerEvent('close');
				}
			}
			resetScale(calendars.order.indexOf(settings.defaultScale));
		}

		var resetScale = function(index) {
			if(typeof index == 'undefined') {
				index = 0;
			}
			$.extend(displayedDate, currentDate);
			calendars.current = calendars.order[index];
			updateDatepicker();
		}

		var setScale = function(scale) {
			calendars.current = scale;
			updateDatepicker();
		}

		var onInit = function() {
			triggerEvent('init');
			updateDatepicker();
			if(!settings.inputEmptyByDefault) {
				updateInput();
			}
			if(settings.openByDefault) {
				openDatepicker();
			}
		}
/*www.sucaijiayuan.com*/
		var onRequestToFocus = function(event) {
			$input.find('input').first().focus();
		}

		var onRequestToOpen = function(event) {
			openDatepicker();
		}

		var onRequestToClose = function(event, force) {
			closeDatepicker();
		}

		var onScaleUp = function(event) {
			var newScale = calendars.order.indexOf(calendars.current) + 1;
			if(newScale == calendars.order.length) {
				resetScale();
			}
			else {
				setScale(calendars.order[newScale]);
			}
		}

		var onScaleDown = function(event) {
			var newScale = calendars.order.indexOf(calendars.current) - 1;
			var newValue = $(this).data(prefixData('value'));

			if(calendars.current == 'month') {
				displayedDate.day = newValue;
			}
			else if(calendars.current == 'year') {
				displayedDate.month = newValue;
			}
			else if(calendars.current == 'decade') {
				displayedDate.year = newValue;
			}

			if(newScale == -1) {
				updateInput();
				closeDatepicker();
				updateDatepicker();
			}
			else {
				setScale(calendars.order[newScale]);
			}
		}

		var triggerEvent = function(event) {
			$node.trigger(prefixEvent(event), self);
		}

		var preventDefault = function(event) {
			event.preventDefault();
		}

		var build = function(_$node) {
			$node = _$node;
			$node.addClass(prefixClass('container'));
			$node.append($(settings.templates.container));

			$input = $node.find('.'+prefixClass('input'));
			$popup = $node.find('.'+prefixClass('popup'));
			$datepicker = $node.find('.'+prefixClass('datepicker'));
			$navigation = $node.find('.'+prefixClass('datepicker-navigation'));
			$calendar = $node.find('.'+prefixClass('datepicker-calendar'));

			$input.on('click focus', 'input', onRequestToOpen);
			$input.on('blur', 'input', onRequestToClose);
			$datepicker.on('mousedown', preventDefault);

			$datepicker.on('click', '.'+prefixClass('datepicker-navigation-previous'), onPrevious);
			$datepicker.on('click', '.'+prefixClass('datepicker-navigation-next'), onNext);
			$datepicker.on('click', '.'+prefixClass('datepicker-navigation-up'), onScaleUp);
			$datepicker.on('click', '.'+prefixClass('datepicker-calendar-value')+', .'+prefixClass('datepicker-calendar-selected-value'), onScaleDown);

			onInit();
		}

		self.node = function() {
			return $node;
		}

		self.settings = function() {
			return settings;
		}

		self.format = function(str, date) {
			return buildString(str, date);
		}

		self.today = function() {
			return today;
		}

		self.firstDayOfTheMonth = function(month, year) {
			// Decreases the month by 1
			// (cause JavaScript counts month from 0 to 11 instead of 1 to 12)
			return firstDayOfTheMonth(month - 1, year).getDate();
		}

		self.lastDayOfTheMonth = function(month, year) {
			// Decreases the month by 1
			// (cause JavaScript counts month from 0 to 11 instead of 1 to 12)
			return lastDayOfTheMonth(month - 1, year).getDate();
		}

		self.setDay = function(day) {
			setDay(day);
			updateInput();
			updateDatepicker();
		}

		self.getDay = function() {
			return currentDate.day;
		}

		self.previousDay = function() {
			previousDay();
			updateInput();
			updateDatepicker();
		}

		self.nextDay = function() {
			nextDay();
			updateInput();
			updateDatepicker();
		}

		self.setMonth = function(month) {
			// Decreases the month by 1
			// (cause JavaScript counts month from 0 to 11 instead of 1 to 12)
			setMonth(month - 1);
			updateInput();
			updateDatepicker();
		}

		self.getMonth = function() {
			// Increases the month by 1
			// (cause JavaScript counts month from 0 to 11 instead of 1 to 12)
			return currentDate.month + 1;
		}

		self.previousMonth = function() {
			previousMonth();
			updateInput();
			updateDatepicker();
		}

		self.nextMonth = function() {
			nextMonth();
			updateInput();
			updateDatepicker();
		}

		self.setYear = function(year) {
			setYear(year);
			updateInput();
			updateDatepicker();
		}

		self.getYear = function() {
			return currentDate.year;
		}

		self.previousYear = function() {
			previousYear();
			updateInput();
			updateDatepicker();
		}

		self.nextYear = function() {
			nextYear();
			updateInput();
			updateDatepicker();
		}

		self.getDecade = function() {
			return decade(currentDate.year);
		}

		self.previousDecade = function() {
			previousDecade();
			updateInput();
			updateDatepicker();
		}
/*www.sucaijiayuan.com*/
		self.nextDecade = function() {
			nextDecade();
			updateInput();
			updateDatepicker();
		}

		self.setDate = function(day, month, year) {
			setYear(year);
			// Decreases the month by 1
			// (cause JavaScript counts month from 0 to 11 instead of 1 to 12)
			setMonth(month - 1);
			// Set day after "year" and "month", cause day's limits are based on current "year" and "month"
			setDay(day);
			updateInput();
			updateDatepicker();
		}

		self.getDate = function() {
			return new Date(currentDate.year, currentDate.month, currentDate.day);
		}

		self.setScale = function(scale) {
			if(calendars.order.indexOf(scale) != -1) {
				setScale(scale);
			}
		}

		self.getScale = function() {
			return calendars.current;
		}

		self.open = function() {
			onRequestToFocus(null);
		}

		self.close = function() {
			onRequestToClose(null, true);
		}

		var initialize = function() {
			completeSettings(_settings);
			build(_$node);
			if(typeof _callback == 'function') {
				_callback(self);
			}
		}();

	}

	function RendezVous() {

		var self = this;

		var settings = {
			htmlAttribute: 'rendezvous'
		}

		var nodes = [];

		var build = function($node, nodeOptions, nodeCallback) {
			new RendezVousNode($node, nodeOptions, nodeCallback);
		}

		self.build = function($node, nodeOptions, nodeCallback) {
			build($node, nodeOptions, nodeCallback);
		}

		self.autoBuild = function() {
			$(root).find('['+settings.htmlAttribute+']').each(function() {
				build($(this), {});
			});
		}

		var initialize = function() {
			self.autoBuild();
		}();

	}

	scope.RendezVous = new RendezVous();

	$.fn.extend({
		RendezVous: function(options, callback) {
			if(typeof options == 'function') {
				callback = options;
				options = {};
			}
			return this.each(function() {
				scope.RendezVous.build($(this), options, callback);
			});
		}
	});
/*www.sucaijiayuan.com*/
}(this, document, $));
