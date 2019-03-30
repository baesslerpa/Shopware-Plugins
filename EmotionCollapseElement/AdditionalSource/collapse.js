let collapseElement = document.querySelectorAll('.collapse-element')

  collapseElement.forEach((element) => {
    element.onclick = (e) => {
      let content = element.querySelector('.my-collapse--content')

      element.querySelector('.my-collapse--header').classList.toggle('is--active')


      if (content.style.maxHeight) {
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      }
      //content.classList.toggle('is--collapsed')
    }
  })
