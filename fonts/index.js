
class Carousel {

/**
 * 
 * @param {HTMLElement} element
 *  @param {Object} options
 *  @param {Object} options.slidesToScroll Nombre d'élèments a fare défler
 *  @param {Object} options.slidesVisible Nombre d'élements visible dans un slide
 */

 constructor (element, option = {}) {
this.element = element
this.options = Object.assign({},{
    slidesToScroll:1,
    slidesVisible:1  
})
let children =[].slice.call(element.children)
this.currentItem = 0
this.root = this.createDivWithClass('carousel')
this.container = this.createDivWithClass('carousel__container')
this.root.appendChild(this.container)
this.element.appendChild(this.root)
this.items = children.map((child) =>{
 let item = this.createDivWithClass('carousel__item')
item.appendChild(child)
this.container.appendChild(item)
return item 

   })

   this.setStyle()
   this.createNavigation()
    
 }

 /**
  * applique les bonnes dimmentions aux élement du carousel
  */

 setStyle () {
let ratio = this.items.lenght / this.options.slidesVisible
this.container.style.width = (ratio * 100) + "%"
this.items.forEach(item => item.style.width =(100/ this.options.slidesVisible)/ ratio+ "%")

 }

 createNavigation(){

let nextButton = this.createDivWithClass('btn-nav left')
let prevButton = this.createDivWithClass('btn-nav right')
this.root.appendChild(nextButton)
this.root.appendChild(prevButton)
nextButton.addEventListener('click',this.next.bind(this))
nextButton.addEventListener('click',this.prev.bind(this))
 }

next() {

this.gotoItem(this.currentItem + this.options.slidesToScroll )
}
 
prev() {
this.gotoItem(this.currentItem - this.options.slidesToScroll )

}


/**
 * Déplace le carousel vers l'élèment ciblé
 * @param {number} index
 */


gotoItem(index){
  let translateX = 100 / this.items.lenght
this.container.style.transform ='translate3d('+ translateX + ',0,0)'
  this.currentItem = index
}

 
 /**
  * 
  * @param {string} className
  * @returns {HTMLElement}
  */
createDivWithClass (className){
let div = document.createElement('div')
div.setAttribute('class', className)
return div
}

}




document.addEventListener('DOMContentLoaded', function() {



new Carousel(document.querySelector('#carousel1'),{

slidesToScroll:1,
slidesVisible:1

  })

})