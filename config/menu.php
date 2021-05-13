<?php

return [
	'dashboard'	=> [
		'PENJUALAN'		=> [
			'Transaksi'	=> [[
				'title'	=> 'Penjualan',
				'url'	=> 'tsale.transaction.index',
				'param' => ['mode' => 'penjualan', 'status' => 'opened'],
				'scope'	=> 'tsale.transaction.penjualan',
			]],
			'Pengaturan Bisnis' => [[
				'title'	=> 'Katalog',
				'url'	=> 'tsale.catalog.index',
				'param' => ['status' => 'published'],
				'scope'	=> 'tsale.catalog.setting',
			], [
				'title'	=> 'Template Note',
				'url'	=> 'tsale.note.get',
				'param' => [],
				'scope'	=> 'tsale.setting.note',
			], [
				'title'	=> 'Preferensi Pembayaran',
				'url'	=> 'tsale.pay.get',
				'param' => [],
				'scope'	=> 'tsale.setting.pay',
			]],
			'Pengaturan Outlet' => [[
				'title'	=> 'Katalog',
				'url'	=> 'tsale.catalog.listing',
				'param' => [],
				'scope'	=> 'tsale.catalog.listing',
			]],
		],
		'PERSEDIAAN'	=> [
			'Dokumen'	=> [[
				'title'	=> 'Tugas',
				'url'	=> 'twh.task.index',
				'param' => ['status' => 'opened'],
				'scope'	=> 'twh.task.index',
			], [
				'title'	=> 'Stok',
				'url'	=> 'twh.document.index',
				'param' => ['status' => 'created'],
				'scope'	=> 'twh.document.index',
			], [
				'title'	=> 'Paket',
				'url'	=> 'twh.record.index',
				'param' => ['status' => 'started'],
				'scope'	=> 'twh.record.index',
			]],
			'Pengaturan Bisnis' => [[
				'title'	=> 'Item',
				'url'	=> 'twh.item.index',
				'param' => ['status' => 'submitted'],
				'scope'	=> 'twh.setting.item',
			]],
		],
		'PEMBELIAN'		=> [
			'Data' 		=> [[
				'title'	=> 'Pembelian',
				'url'	=> 'tproc.transaction.index',
				'param' => ['mode' => 'pembelian', 'status' => 'opened'],
				'scope'	=> 'tproc.transaction.pembelian',
			]],
		],
	],
	'thunder'	=> [
		'Pengaturan' => [[
			'title'	=> 'Pengguna',
			'url'	=> 'tacl.user.index',
			'param' => ['sort[name]' => 'asc'],
			'scope'	=> 'tacl.setting.user',
		]],
	],
	'glossary'		=> [
		'tacl'      => 'Akses', 
        'tsub'      => 'Langganan',
        'tsale'     => 'Penjualan', 
        'tcust'     => 'Pelanggan',
        'twh'       => 'Persediaan', 
        'tmf'       => 'Produksi', 
        'tproc'     => 'Pembelian', 
        'tfin'      => 'Keuangan', 
        'tswirl'    => 'Bisnis', 
	],
];
