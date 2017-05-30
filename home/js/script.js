// FOREACH POLYFILL
Array.prototype.forEach||(Array.prototype.forEach=function(a){var b,c;if(null==this)throw new TypeError("this is null or not defined");var d=Object(this),e=d.length>>>0;if("function"!=typeof a)throw new TypeError(a+" is not a function");for(arguments.length>1&&(b=arguments[1]),c=0;c<e;){var f;c in d&&(f=d[c],a.call(b,f,c,d)),c++}});


var windowWidth = $(window).width()
var windowHeight = $(window).height()
var scrollTop = 0

$(window).resize( function() {
  var windowWidth = $(window).width()
  var windowHeight = $(window).height()
}).scroll( function() {
  scrollTop = document.body.scrollTop
})

$(document).ready(function() {

  var projectOpen = false
  var currentOpenProject = undefined
  var cursorOutsideProjectViewer = false
  var projects = {}

  //extras
  var remap = function (x, in_min , in_max , out_min , out_max ) {
  	if (x < in_min) { x = in_min }
  	if (x > in_max) { x = in_max }
    	return ( x - in_min ) * ( out_max - out_min ) / ( in_max - in_min ) + out_min;
  }
  var clip = function (x, min , max ) {
  	if (x < min) x = min
  	if (x > max) x = max
    return x
  }

  TweenMax.defaultEase = Power1.easeInOut


  function Project(projectId, $viewer) {
    this.projectId = projectId
    this.$viewer = $viewer

    this.$floater = $('.floater[data-projectId="'+this.projectId+'"]')

    //create gsap draggable
    Draggable.create( this.$floater, {
      type: "x,y",
      edgeResistance: 0.65,
      bounds: "#wrapper",
      onPress: dragStartHandler,
      onPressParams: [this.$floater],
      onDragEnd: dragEndHandler,
      onDragEndParams: [this.$floater]
    })

    function dragStartHandler( $floater) {
      TweenMax.killTweensOf($floater)
    }
    function dragEndHandler($floater) {
      TweenMax.killTweensOf($floater)
      // $floater.css('z-index','1')
      startFloating($floater)
    }

    //CLOSEBUTTON
    this.$closeButton = $('<div class="closeButton">close</div>')
      .css('opacity',0)
      .click(function() {
        closeProjects()
      })
      .appendTo(this.$viewer)

    var _this = this
  } //end Project constructor

  Project.prototype.open = function(clickEvent) {
    projectOpen = true
    currentOpenProject = this
    var _this = this
    window.location.hash = _this.projectId

    TweenMax.killTweensOf( _this.$floater )
    var projectId = _this.$floater.attr('data-projectId')

    _this.$viewer
      .addClass('projectOpen')

    var transformData = _this.$floater[0]._gsTransform

    var x = transformData.x+(_this.$floater.width()/2)
    var y = transformData.y+(_this.$floater.height()/2)
    var duration = 0.25

    if (clickEvent === undefined) {
      duration = 0
    }

    TweenMax.fromTo(_this.$floater, duration, {
      scale:1,
      transformOrigin: 'center center',
    },{
      scale: 0
    })

    TweenMax.fromTo( _this.$viewer, duration, {
      transformOrigin: x+'px '+y+'px',
      scale: 0.1,
      opacity:0,
      ease: Power2.easeOut
    },{
      scale: 1,
      opacity: 1,
      onComplete: function() {
        TweenMax.to(_this.$closeButton, 0.3, {opacity: 0.8, delay: 0.2, ease: Power0.easeNone})
      }
    })

  } //end open()

  // CREATE PROJECT OBJECTS BASED ON DOM
  $('div.viewer').each(function() {
    var id = $(this).attr('data-projectId')
    projects[id] = new Project( id, $(this) )
  })

  //prevent caching
  $('.floaterImg').each( function() {
    var src = $(this).attr('src')
    $(this).attr('src', src+'?random='+parseInt(Math.random()*1000))

    var $img = $(this)

    $img.parent().css({
      width: $img.width()
    })
  })

  // CSSPlugin.defaultTransformPerspective = 1000
  if (WURFL.is_mobile === false ) {
    if (WURFL.complete_device_name === "Google Chrome") {
      var spaceGrid = $('.spaceGrid')[0]
      document.body.addEventListener('mousemove', function(e) {
        var max = 3
        var newX = remap(e.pageX, 0, screen.width, -max, max )
        var newY = remap(e.pageY, 0, screen.height, -max, max)
        TweenLite.to(spaceGrid, 3, {
          rotationX: newY,
          rotationY: newX,
          ease: Power3.easeOut
        })

      })
    }

    TweenMax.to('#croppedMeFront', 20, {ease: Power0.easeNone, repeat: -1, rotationZ:'+=360deg'})
    document.body.addEventListener('mousemove', function(e) {

      if (projectOpen && cursorOutsideProjectViewer) {
        TweenMax.to(currentOpenProject.$closeButton, 0.2, {
          position: "absolute",
          left: e.pageX -32,
          top: e.pageY - 17 + currentOpenProject.$viewer[0].scrollTop
        })
      }
    })

  } else if (WURFL.is_mobile) {

    $('.floaterImg').each( function(){
      if ($(this).width() >  $(this).height() )  {
        $(this)[0].width = 100
      } else {
        $(this)[0].height = 100
      }
    })
  }

  // INIT EACH FLOATER ON INDIVIDUAL LOAD
  $('.floater:not(.dummy) .floaterImg').on( 'load', function() {
    var $floater = $(this).parent()
    var $floaterImg = $(this)
    var $projectContents = $floater.children('.projectContents')

    //SOUNDS -_-__- -_-__--_-__--_-__- -_-__--_-__- -_-__- -_-__--_-__--_-_
    var floaterHoverPlayer = new Tone.Player({
      "url": 'home/audio/popin4.mp3',
      "autostart": false,
      "retrigger": true,
      "volume": -25,
      "playbackRate": 2.5
    }).toMaster()

    // // get proportionate height
    // var scaleAmt = $floaterImg.width() / $floaterImg[0].naturalWidth
    $floater.css({
      width: $floaterImg.width()
    })

    Tone.Buffer.on('load', function() {
      $floaterImg.on('mouseenter', function() {
        floaterHoverPlayer.start()
      })
    })
    $floaterImg.on('mouseenter', function() {
      TweenMax.to( $floaterImg[0], 0.1, {
        scale: 1.04
      })
    }).on('mouseleave', function() {
      TweenMax.to( $floaterImg[0], 0.1, {
        scale: 1
      })
    })

    //start motion
    initFloater( $floater )
    startFloating($floater)

  })

  function startFloating($floater) {
    floatOnAxis( $floater, ['x','y'], 100, {ease: Linear.easeNone})
  }

// fix image load event trigger    http://stackoverflow.com/questions/3877027/jquery-callback-on-image-load-even-when-the-image-is-cached
  $('img').each(function() {
    if(this.complete) { $(this).trigger('load') }
  })

  function closeProjects() {
    projectOpen = false
    // unZoomGrid()

    window.location.hash = ''
    stopBlinking()

    $('.viewer.projectOpen').each( function() {
      var $viewer = $(this)

      var projectId = $viewer.attr('data-projectId')
      var $floater = $('.floater[data-projectId="'+projectId+'"]')

      if ( !$floater.hasClass('about') ) {
        $floater.addClass('alreadyViewed')
      }

      var transformData = $floater[0]._gsTransform

      var x = transformData.x+($floater.width()/2)
      var y = transformData.y+($floater.height()/2)

      // collapses viewer
      TweenMax.to( $viewer, 0.25, {
        scale: 0,
        opacity: 0,
        transformOrigin: x+'px '+y+'px',
        onComplete: function() {
          TweenMax.to($viewer.children('.closeButton'), 0.1, {opacity: 0})
          $viewer.removeClass('projectOpen')
          Draggable.get( $floater ).enable()
          startFloating( $floater)
          currentOpenProject = undefined
        }
      })
      // currentOpenProject = false


      // expand floater
      TweenMax.to( $floater, 0.25, {
        scale: 1,
        transformOrigin: 'center center'
      })

    }) // end each
  } // end func


  // SET WIDTH OF PARENT FLOATERS BASED ON WIDTH OF IMAGES

  // LISTENERS
  $('.floater').click( function(e) {
    var id = $(this).attr('data-projectId')
    projects[id].open(e)
    event.stopPropagation()
  })

  $('.viewer').click( function(e) {
    closeProjects()
  }).mouseenter( function(e) {
    startBlinking()
  }).mouseleave( function(e) {
    stopBlinking()
  })

  function startBlinking() {
    cursorOutsideProjectViewer = true
    currentOpenProject.$closeButton.css({
      position: 'absolute',
      margin: '0'
    })
    TweenMax.to(currentOpenProject.$closeButton, 0.3, {
      opacity: 0.2,
      ease: Power1.easeInOut,
      repeat: -1,
      yoyo: true
    })
  }

  function stopBlinking() {
    if (currentOpenProject !== undefined) {
      cursorOutsideProjectViewer = false
      TweenMax.killTweensOf(currentOpenProject.$closeButton)
      currentOpenProject.$closeButton.css({
        position: 'absolute',
        margin: '0 auto'
      })
      TweenMax.to(currentOpenProject.$closeButton, 0.2, {
        opacity: 0.8,
        left: 0,
        top: ''
      })
    }
  }

  $('.projectContents').click( function(e) {
    e.stopPropagation()
  }).mouseenter( function(e) {
    // $('.viewer.projectOpen').trigger('mouseleave')
    // stopBlinking()
    e.stopPropagation()
  }).mouseleave( function(e) {
    // $('.viewer.projectOpen').trigger('mouseenter')
  })

  // disable desktop-only externalLinks
  if (WURFL.is_mobile) {
    $('.desktopOnly').each( function() {
      // var $contents = $(this).children('p')

      var url = $(this).attr('href')
      var $replacement = $('<div>')
        .attr('class', $(this).attr('class')+' clickDisabled')
        .html('<p class="externalLinkButtonCaption">view project on a laptop or desktop: <span style="color:black; cursor:text;">'+url.split('http://')[1]+'</span></p>')

        // .find('.externalLink').hide()

      $(this)
        .replaceWith($replacement)
        // .addClass('clickDisabled')
        // .removeAttr('href')
        .on('click mouseenter', function(e) {
          e.preventDefault()
        })
    })
  }2

  $('.projectContents').click( function(e) {
    e.stopPropagation()
  }).mouseenter( function(e) {
    $('.viewer.projectOpen').trigger('mouseleave')
    stopBlinking()
    e.stopPropagation()
  }).mouseleave( function(e) {
    $('.viewer.projectOpen').trigger('mouseenter')
  })


  //INIT

  //zoom in spaceGrid
  TweenMax.fromTo( $('.spaceGrid'), 1, {opacity:0, scale: 1.1}, {opacity:1, scale: 1.05 })

  //detect hash in url
  function openProjectFromHash() {
    var id = window.location.hash.split('#')[1]
    if (id === undefined) {
      closeProjects()
    } else {
      Object.keys(projects).forEach( function(key) {
        var project = projects[key]
        if (project.projectId === id)  {
          // if (currentOpenProject !== undefined) {
          //   closeProjects()
          // }
          setTimeout( function() {
            project.open()
          }, 300)
        }
      })
    }
  }

  openProjectFromHash()

  window.onhashchange = function() {
    openProjectFromHash(window.location.hash.split('#')[1])
  }

  // $(window).on('hashchange', function(e) {
  //   var id = window.location.hash.split('#')[1]
  //   console.log(id)
  // })

})
