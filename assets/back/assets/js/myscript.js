$('.tombol-logout').on('click', function (event) {
	event.preventDefault();

	const href = $(this).attr('href');


	Swal.fire({
		title: 'Apa anda yakin?',
		text: "Anda akan keluar dari halaman ini!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Keluar'
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	})


});

$('.tombol-coblos').on('click', function (event) {
	event.preventDefault();

	const href = $(this).attr('href');
	const paslon = $(this).data('paslon');

	Swal.fire({
		title: 'Apa anda yakin?',
		text: "Anda akan memilih " + paslon,
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Coblos!'
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	})


});

$('.tombol-hapus').on('click', function (event) {
	event.preventDefault();

	const href = $(this).attr('href');
	const user = $(this).data('user');

	Swal.fire({
		title: 'Apa anda yakin?',
		text: "Anda akan menghapus user " + user,
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus!'
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	})


});
$('.tombol-deleteall').on('click', function (event) {
	event.preventDefault();

	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apa anda yakin?',
		text: "Anda akan menghapus semua user ",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus!'
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	})


});

$('.tombol-reset').on('click', function (event) {
	event.preventDefault();

	const href = $(this).attr('href');
	const user = $(this).data('user');


	Swal.fire({
		title: 'Apa anda yakin?',
		text: "Anda akan me-reset user " + user,
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Reset!'
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	})


});
$('.tombol-resetall').on('click', function (event) {
	event.preventDefault();

	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apa anda yakin?',
		text: "Anda akan me-reset semua user ",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Reset!'
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	})


});

$('.tombol-hapus-paslon').on('click', function (event) {
	event.preventDefault();

	const href = $(this).attr('href');
	const paslon = $(this).data('paslon');

	Swal.fire({
		title: 'Apa anda yakin?',
		text: "Anda akan menghapus paslon " + paslon,
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus!'
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	})


});

$('.tombol-hapus-role').on('click', function (event) {
	event.preventDefault();

	const href = $(this).attr('href');
	const role = $(this).data('role');

	Swal.fire({
		title: 'Apa anda yakin?',
		text: "Anda akan menghapus role " + role,
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus!'
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	})


});

$('.tombol-hapus-feedback').on('click', function (event) {
	event.preventDefault();

	const href = $(this).attr('href');
	const feedback = $(this).data('feedback');

	Swal.fire({
		title: 'Apa anda yakin?',
		text: "Anda akan menghapus feedback dari " + feedback,
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus!'
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	})


});

$('.tombol-hapus-menu').on('click', function (event) {
	event.preventDefault();

	const href = $(this).attr('href');
	const menu = $(this).data('menu');

	Swal.fire({
		title: 'Apa anda yakin?',
		text: "Anda akan menghapus menu " + menu,
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus!'
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	})


});

$('.tombol-hapus-submenu').on('click', function (event) {
	event.preventDefault();

	const href = $(this).attr('href');
	const submenu = $(this).data('submenu');

	Swal.fire({
		title: 'Apa anda yakin?',
		text: "Anda akan menghapus submenu " + submenu,
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus!'
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	})


});