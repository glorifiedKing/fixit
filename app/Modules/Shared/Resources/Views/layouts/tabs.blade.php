<div class="woocommerce-reports-wide">
	<div class="postbox">
	   <!-- TOP BUTTONS & TABS -->
		<div class="stats_range">
		  <!-- TOP RIGHT BUTTONS -->
		  @if (isset($rightmenu))
				@if (is_array($rightmenu))
					 @foreach ($rightmenu as $menu)
						 <a href="{!! $menu->url !!}" class="export_csv">{!! $menu->label !!}</a>
					 @endforeach
				@endif
			@endif
			
			 <!-- TOP LEFT BUTTONS -->
			<ul>
			@if (isset($tabs))
				@if (is_array($tabs))
					 @foreach ($tabs as $tab)
					 	<li class="{!! $tab->class !!}">
							<a href="{!! $tab->url !!}" >{!! $tab->label !!}</a>
						</li>
					 @endforeach
				@endif
			@endif
			</ul>
		</div>

		<!-- SHOW INSIDE THE TABS -->
		<div class="inside">
		   @if (isset($content))
		     {!! $content !!}
		   @endif
		</div>
	</div>
</div>