<?php

use Illuminate\Database\Seeder;

class CommonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert([
            0 =>
                [
                    'id'             => 1,
                    'name'           => 'Admin',
                    'email'          => 'admin@qq.com',
                    'password'       => '$2y$10$T29WbR1JmXv1JxbZ.43LfuwFvxtdK/ny5YeXqS9ykXRG2zJ.BuE1.',
                    'is_super_admin' => 1,
                    'remember_token' => 'igLbXF1RMdkJ1HBYnGZv7UmlJ3MRWcjzF42JNfUIhkovmRl7CwpfAOxCci4g',
                    'created_at'     => '2017-02-03 09:52:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
        ]);

        \DB::table('abouts')->delete();

        \DB::table('abouts')->insert([
            0 =>
                [
                    'id'             => 3,
                    'title'           => '关于我们',
                    'type'          => 1,
                    'content'          => '',
                    'created_at'     => '2017-02-03 09:52:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            1 =>
                [
                    'id'             => 4,
                    'title'           => '存款帮助',
                    'type'          => 2,
                    'content'          => '',
                    'created_at'     => '2017-02-03 09:52:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            2 =>
                [
                    'id'             => 5,
                    'title'           => '取款帮助',
                    'type'          => 3,
                    'content'          => '',
                    'created_at'     => '2017-02-03 09:52:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            3 =>
                [
                    'id'             => 6,
                    'title'           => '常见问题',
                    'type'          => 4,
                    'content'          => '',
                    'created_at'     => '2017-02-03 09:52:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
//            4 =>
//                [
//                    'id'             => 7,
//                    'title'           => '免责声明',
//                    'type'          => 5,
//                    'content'          => '',
//                    'created_at'     => '2017-02-03 09:52:51',
//                    'updated_at'     => '2017-02-03 09:52:51',
//                ],
//            5 =>
//                [
//                    'id'             => 8,
//                    'title'           => '代理合作',
//                    'type'          => 6,
//                    'content'          => '',
//                    'created_at'     => '2017-02-03 09:52:51',
//                    'updated_at'     => '2017-02-03 09:52:51',
//                ],
        ]);

        \DB::table('roles')->delete();

        \DB::table('roles')->insert([
            0 =>
                [
                    'id'             => 1,
                    'name'          => '普通管理员',
                    'created_at'     => '2017-02-03 09:52:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
        ]);

        \DB::table('system_config')->delete();

        \DB::table('system_config')->insert([
            0 =>
                [
                    'id'             => 1,
                    'site_name'      => '网站名称',
                    'site_title'     => '网站标题',
                    'keyword'       => '关键词1,关键词2,关键词3,关键词4,关键词5',
                    'phone1'        => '021-xxxxxxxx',
                    'phone2'        => '021-xxxxxxxx',
                    'site_domain'   => 'www.motoogame.com',
                    'active_member_money' => 200,
                    'third_version' => '1.0',
                    'third_pay_url' => '',
                    'created_at'     => '2017-02-03 09:52:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
        ]);

        \DB::table('api')->delete();

        \DB::table('api')->insert([

            // t 5
            250 =>
                [
                    'id'             => 250,
                    'api_name'      => 'SELF',
                    'api_title'     => 'SELF',
                    'on_line'       => 1,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            251 =>
                [
                    'id'             => 251,
                    'api_name'      => 'AG',
                    'api_title'     => 'AG',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            252 =>
                [
                    'id'             => 252,
                    'api_name'      => 'BBIN',
                    'api_title'     => 'BBIN',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            253 =>
                [
                    'id'             => 253,
                    'api_name'      => 'MG',
                    'api_title'     => 'MG',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            254 =>
                [
                    'id'             => 254,
                    'api_name'      => 'EG',
                    'api_title'     => 'EG',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            255 =>
                [
                    'id'             => 255,
                    'api_name'      => 'PT',
                    'api_title'     => 'PT',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            256 =>
                [
                    'id'             => 256,
                    'api_name'      => 'PNG',
                    'api_title'     => 'PNG',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            257 =>
                [
                    'id'             => 257,
                    'api_name'      => 'SS',
                    'api_title'     => 'SS',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            258 =>
                [
                    'id'             => 258,
                    'api_name'      => 'AB',
                    'api_title'     => 'AB',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            261 =>
                [
                    'id'             => 261,
                    'api_name'      => 'IBC',
                    'api_title'     => 'IBC',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            266 =>
                [
                    'id'             => 266,
                    'api_name'      => 'SUNBET',
                    'api_title'     => 'SUNBET',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            268 =>
                [
                    'id'             => 268,
                    'api_name'      => 'OG',
                    'api_title'     => 'OG',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            269 =>
                [
                    'id'             => 269,
                    'api_name'      => 'VR',
                    'api_title'     => 'VR',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            270 =>
                [
                    'id'             => 270,
                    'api_name'      => 'KG',
                    'api_title'     => 'KG',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            271 =>
                [
                    'id'             => 271,
                    'api_name'      => 'KY',
                    'api_title'     => 'KY',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            272 =>
                [
                    'id'             => 272,
                    'api_name'      => 'CQ9',
                    'api_title'     => 'CQ9',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            273 =>
                [
                    'id'             => 273,
                    'api_name'      => 'EBET',
                    'api_title'     => 'EBET',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            274 =>
                [
                    'id'             => 274,
                    'api_name'      => 'DG',
                    'api_title'     => 'DG',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            275 =>
                [
                    'id'             => 275,
                    'api_name'      => 'TTG',
                    'api_title'     => 'TTG',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
            276 =>
                [
                    'id'             => 276,
                    'api_name'      => 'GG',
                    'api_title'     => 'GG',
                    'on_line'       => 0,
                    'type'          => 5,
                    'created_at'     => '2017-02-03 09:17:51',
                    'updated_at'     => '2017-02-03 09:52:51',
                ],
        ]);

        //插入游戏
        $game_list_data = config('game_list');
        $api_list = \App\Models\Api::orderBy('created_at', 'desc')->pluck('id', 'api_name')->toArray();
        foreach ($game_list_data as $api_name => $item)
        {
            if (count(array_filter($item)) > 0)
            {
                //$api_id = $api_list[strtoupper($api_name)];
                foreach ($item as $k => $v)
                {
                    if (count(array_filter($v)) > 0)
                    {
                        $client_type = $k == 'web'?1:2;
                        foreach ($v as $value)
                        {
                            \App\Models\GameList::create([
                                'api_name' => strtoupper($api_name),
                                'name' => $value['name'],
                                'client_type' => $client_type,
                                'game_type' => 3,//默认电子
                                'game_id' => $value['id'],
                                'img_path' => $value['img'],
                                'on_line' => 0,
                                'game_name' => isset($value['game_name'])?$value['game_name']:''
                            ]);
                        }
                    }

                }
            }


        }


    }
}
