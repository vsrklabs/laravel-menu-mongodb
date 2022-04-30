<script>
	var menus = {
		"oneThemeLocationNoMenus" : "",
		"moveUp" : "Move up",
		"moveDown" : "Mover down",
		"moveToTop" : "Move top",
		"moveUnder" : "Move under of %s",
		"moveOutFrom" : "Out from under  %s",
		"under" : "Under %s",
		"outFrom" : "Out from %s",
		"menuFocus" : "%1$s. Element menu %2$d of %3$d.",
		"subMenuFocus" : "%1$s. Menu of subelement %2$d of %3$s."
	};
	var arraydata = [];     
	var addcustommenur= '{{ route("menus.items.create") }}';
	var updateitemr= '{{ route("menus.items.update")}}';
	var generatemenucontrolr= '{{ route("menus.update") }}';
	var deleteitemmenur= '{{ route("menus.items.delete") }}';
	var deletemenugr= '{{ route("menus.delete") }}';
	var createnewmenur= '{{ route("menus.create") }}';
	var csrftoken="{{ csrf_token() }}";
	var menuwr = "{{ url()->current() }}";

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': csrftoken
		}
	});
</script>
<script type="text/javascript" src="{{asset('vendor/menu-builder/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/menu-builder/scripts2.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/menu-builder/menu.js')}}"></script>