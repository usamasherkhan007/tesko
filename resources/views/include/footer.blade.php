<style>
.footer {
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #343a40;
   color: white;
   position: fixed;
   text-align: center;
}

</style>

		<div class="footer">
			<div class="row">
				<div class="col-md-8" style="text-align: end; padding-right: 144px;">
					<p>Here is VPhub Rights 2021</p>
				</div>
				<div class="col-md-4 " style="text-align: end; padding-right: 1px;">
					 <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link  href="{{ route('logout') }}" 
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                  <i class="fas fa-sign-out-alt fa-2x" style="color: #d81f1f9e;"></i>
                                </x-jet-dropdown-link>
                            </form>
				</div>
			<div>
			
					
			
		</div>
	</body>
</html>