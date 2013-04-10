<script id="brew-template" type="text/x-handlebars-template">
{{#brews}}
	<div class="brew">
    	<div class="brew-title">{{title}}</div>
    	<div class="brew-type">{{type}}</div>
    	<div class="brew-description">{{details.description}}</div>
    	<ul class="brew-additional">
			{{#details.additional}}
				<li>
					<span class="brew-additional-label">{{label}}</span>
					<span class="brew-additional-details">{{details}}</span>
				</li>
			{{/details.additional}}
			{{#details.reviews}}
				<li>
					<span class="brew-additional-label">{{title}}</span>
					<span class="brew-additional-details">{{details}}</span>
				</li>
			{{/details.reviews}}
    	</ul>
	</div>
{{/brews}}
</script>

