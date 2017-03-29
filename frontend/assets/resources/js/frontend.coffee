"use strict";

$body = $("body")

$body.on("click", ".share-fb", (e)->
  $this = $(this)
  FB.ui({
    method: 'share',
    href: $this.data('share-url'),
  });
)