



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


<script type="text/javascript">
  // brews - load data object (JSON) into JavaScript variable
  billy.templateData = {
	  brews: [
		  {
		    title: "Double Trouble",
		    type: "IPA",
		    details: {
		      description: "Double Trouble was the first brew by Billy's Cantina, and as such, not much information is available for it.",
		      imageSrc: "http://billyscantina.com/image.php/doubleTrouble.jpeg?width=533&height=533&image=/images/spirits/doubleTrouble.jpeg",
		      additional: [
		        {
		          label: "Keg Status",
		          details: "Empty"
		        }
		      ],
		      reviews: [
		        {
		          title: "Best beer ever!",
		          details: "This was by far the best beer that I have ever had.  It was nice and hoppy"
		        }
		      ]
		    }
		  },
		  {
		    title: "Double Trouble",
		    type: "IPA",
		    details: {
		      description: "Double Trouble was the first brew by Billy's Cantina, and as such, not much information is available for it.",
		      imageSrc: "http://billyscantina.com/image.php/doubleTrouble.jpeg?width=533&height=533&image=/images/spirits/doubleTrouble.jpeg",
		      additional: [
		        {
		          label: "Keg Status",
		          details: "Empty"
		        }
		      ],
		      reviews: [
		        {
		          title: "Best beer ever!",
		          details: "This was by far the best beer that I have ever had.  It was nice and hoppy"
		        }
		      ]
		    }
		  }
	  ]
};

  // compile template
  var brewTemplateSource   = $("#brew-template").html();
  var brewTemplate = Handlebars.compile(brewTemplateSource);

  // render template
  var brewTemplateHtml = brewTemplate(billy.templateData);
  $('#content').append(brewTemplateHtml);

</script>

