<div class="mdl-layout__tab-panel" id="add-shoutout">
	<section class="section--center mdl-grid mdl-grid--no-spacing">
		<form action="{{ route('shoutouts.store') }}" method="POST" id="create-form" class="mdl-cell mdl-cell--12-col">
			<h2 class="mdl-typography--display-4">Make Some Noise</h2>
			

			<div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
					<input class="mdl-textfield__input ajax-content" name="mame" type="text" id="mame" />
					<label class="mdl-textfield__label" for="mame">meme</label>
				</div>
			</div>

			<div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
					<textarea class="mdl-textfield__input ajax-content" name="content" rows="3" id="content" ></textarea>
					<label class="mdl-textfield__label" for="content">Whadya wanna say?</label>
				</div>
			</div>

            @csrf

			<input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">

			<div>
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">Shout</button>
			</div>
		</form>
	</section>
</div>