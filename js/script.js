document.addEventListener('DOMContentLoaded', function(){

  var animated1 = document.querySelectorAll('.animated');
  var lightBox = document.querySelector('.lightbox');
  var project1 = document.querySelector('.project1');
  var project2 = document.querySelector('.project2');
  var lightArrayImg = document.querySelectorAll('.lightbox img');


  //  add fadeIn on all animated class of section 1
  for (var i = 0; i < animated1.length; i++) {
    animated1[i].classList.add('fade-in');
  }

  function openLightBox(a) {
    a.classList.remove('fade-out-lightbox');
    a.classList.add('active-lightbox', 'fade-in-lightbox');
    document.body.style.overflow = "hidden";
  }

  function closeLightBox(a) {
    a.classList.remove('fade-in-lightbox');
    a.classList.remove('active-lightbox');
    a.classList.add('fade-out-lightbox');
    document.body.style.overflow = "auto";
  }

  //animation projet
  welcomr.addEventListener("click", function() {
    openLightBox(project1);
  })
  project1.addEventListener("click", function() {
    closeLightBox(project1);
  })

  collegiens.addEventListener("click", function() {
    openLightBox(project2);
  })
  project2.addEventListener("click", function() {
    closeLightBox(project2);
  })

  // animation gallery image
  figure1.addEventListener("click", function() {
    openLightBox(lightBox);
    lightArrayImg[0].style.display = "block";
  });

  figure2.addEventListener("click", function() {
    openLightBox(lightBox);
    lightArrayImg[1].style.display = "block";
  });

  figure3.addEventListener("click", function() {
    openLightBox(lightBox);
    lightArrayImg[2].style.display = "block";
  });


  lightBox.addEventListener("click", function() {
    closeLightBox(lightBox);
    lightArrayImg[0].style.display = '';
    lightArrayImg[1].style.display = '';
    lightArrayImg[2].style.display = '';
  })

}, false);
