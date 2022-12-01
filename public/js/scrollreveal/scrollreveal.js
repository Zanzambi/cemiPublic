// for animationse
ScrollReveal().reveal('.headline'); 
ScrollReveal().reveal('.heroDiv', {
    delay: 300,
    origin: 'bottom',
    mobile: true,
});
const defaultEfect = function(divClass){
    return ScrollReveal().reveal(divClass, {
        delay: 300,
        mobile: true,
        distance: '150%',
        origin: 'bottom',
        opacity: null,
        duration: 900,
        reset: false
    })
}
const leftEntry = function(divClass){
    return ScrollReveal().reveal(divClass, {
        delay: 500,
        distance: '150%',
        origin: 'left',
        opacity: null,
    })
}
const rightEntry = function(divClass){
    return ScrollReveal().reveal(divClass, {
        delay: 500,
        distance: '150%',
        origin: 'right',
        opacity: null,
    })
    
}
    rightEntry('.rightSubHero')
    leftEntry('.leftSubHero')
    defaultEfect('.heroSection');
    defaultEfect('.espSection');



