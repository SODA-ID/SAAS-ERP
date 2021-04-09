<?php

return [
	'name'          => 'PT THUNDER LABS INDONESIA',
    'url'           => 'https://thunderlab.id',
    'email'         => 'hello@thunderlab.id',
    'whatsapp'      => '+62.896.7200.7400',
    'address'       => 'VERNON BUILDING, Jln. Letjen Sutoyo No. 102A, Kota Malang, Jawa Timur, Indonesia 65141',
    'mode'			=> 'local',
    // 'mode'		=> 'tenant',
	'support'		=> ['tacl', 'tsub'],
	'setting'		=> [
		'reserved_hosts' 		=> [
			'nakoa.id',
			'member.nakoa.id',
			'ownerx.nakoa.id',
			'thunder.nakoa.id',
			'tools.nakoa.id',
		],
		'dashboard'	=> 'BTMDW01',
		'customer'	=> 'BTCSA01',
	],
	'scopes'		=> [
        'tacl.setting.user'	=> 'Mengatur user',
	],
	'opsi'			=> [
		'level'		=> [
			'member'		=> 'Anggota',
			'owner'			=> 'Pemilik',
			'thunder'		=> 'Thunder',
		],
		'role'		=> [
			'tsale.opsi.outlet'		=> 'Outlet',
			'twh.opsi.warehouse'	=> 'Gudang',
			'tfin.opsi.branch'		=> 'Unit',
		],
	]
];
