@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Index</div>

                <div class="card-body">
                    <?php
                    echo  "chinu";
                    ?>
                        <div class="mdl-layout__tab-bar mdl-color--blue">
		                    <a href="hahah" class="mdl-layout__tab is-active">Shoutouts</a>
		                    <a href="add-shoutout" class="mdl-layout__tab">Add Shoutout</a>
	                     </div>


                         <div class="mdl-layout__tab-panel mdl-color--grey-100 is-active" id="shoutouts">	
				            
					            @include('partials.shout', compact('shoutout'))
				                   
					            <h5>Nothing to Show</h5>
				               

				                
			                    </div>

			                @include('partials.addshout')

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
