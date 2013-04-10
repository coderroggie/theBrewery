<script id="brew-template" type="text/x-handlebars-template">
{{#each brews}}
	<div class="brew">
    	<div class="brew-title">{{title}}</div>
    	<div class="brew-type">{{type}}</div>
    	<div class="brew-description">{{details.description}}</div>
    	<ul class="brew-additional">
			{{#each details.additional}}
				<li>
					<span class="brew-additional-label">{{label}}</span>
					<span class="brew-additional-details">{{details}}</span>
				</li>
			{{/each}}
			{{#each details.reviews}}
				<li>
					<span class="brew-additional-label">{{title}}</span>
					<span class="brew-additional-details">{{details}}</span>
				</li>
			{{/each}}
    	</ul>
	</div>
{{/each}}
</script>

