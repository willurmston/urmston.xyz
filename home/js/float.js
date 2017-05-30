function initFloater($el) {
   //randomly position and scale down
  TweenMax.set( $el, {
    x:Math.random()* ( $(window).width() - $el.width() ), 
    y:Math.random() * ($(window).height() - $el.height() ),
    z:0,
    scale:0,
    transformOrigin:'50% 50%',
    transformStyle: 'preserve-3d',
  })  

  $el.show()

  //scale up
  TweenMax.to($el, 0.5, {
    scale: 1,
    ease: Back.easeOut
  })
}

function floatOnAxis($el, axis, pixPerSec, options) {
  // options {
  //   maxZ
  //   ease
  // }

  var options = options || {test:'test'}

  // if axis is an array: ['x','y','z'], loop thru
  if (Array.isArray(axis)) {
    for (var i=0;i<axis.length;i++) {
      var $newEl = $el
      var newAxis = axis[i]
      var newPixPerSec = pixPerSec
      var newOptions = options
      animateOneAxis($newEl, newAxis, newPixPerSec, newOptions)
    }
  } else {
    animateOneAxis($el, axis, pixPerSec, options)
  }

  function animateOneAxis($el, axis, pixPerSec, options) {
    var el = $el[0]

    var lastPos = el._gsTransform[axis]

    var animationParams = {
      ease: options.ease || Linear.easeNone,
      transformOrigin: '50% 50%',
      onComplete: animateOneAxis,
    }

    // $el.parent().css({'-webkit-perspective-origin': "50% 50%"})

    if (axis === 'x') { 
      var newPos = Math.random()*($el.parent().width() - ( $el.width() ) )
    } else if (axis === 'y') {
      var newPos = Math.random()*($el.parent().height() - ( $el.height() ) )
    } else if (axis === 'z') {
      // var minZ =  -300 || options.minZ
      // var maxZ = 300 || options.maxZ

      if (options.minZ === undefined) { options.minZ = -300}
      if (options.maxZ === undefined) { options.maxZ = 300}

      var newPos = remap(Math.random(), 0, 1, options.minZ, options.maxZ)
    }

    // set target position on selected axis
    animationParams[axis] = newPos

    // distance between last and next position
    var delta = lastPos - newPos

    // time it will take to get to target position
    var duration = Math.abs(delta * (pixPerSec / 1000))

    animationParams.onCompleteParams = [$el, axis, pixPerSec, options]

    //animate
    TweenMax.to(el, duration, animationParams)
  }
}



    