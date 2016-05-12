    google.load(&quot;annotations&quot;, &quot;1&quot;, {&quot;locale&quot;: &quot;<data:top.languageCode/>&quot;});
      function initialize() {
        google.annotations.setApplicationId(<data:top.blogspotReviews/>);
        google.annotations.createAll();
        google.annotations.fetch();
      }
      google.setOnLoadCallback(initialize);
      function bp_thumbnail_resize(e,d){var c=1600;var a=true;var b="http://2.bp.blogspot.com/-erTXCq61ULM/TmHYAQBZ0GI/AAAAAAAACCs/6cBX54Dn6Gs/s1600/default.png";if(a==true&&e==""){e=b}image_tag='<img src="'+e.replace("/s72-c/","/s"+c+"/")+'" class="postthumb" alt="'+d+'" width="180px" height="130px"/>';if(e!=""){return image_tag}else{return""}};
      document.write(bp_thumbnail_resize(&quot;<data:post.thumbnailUrl/>&quot;,&quot;<data:post.title/>&quot;));
