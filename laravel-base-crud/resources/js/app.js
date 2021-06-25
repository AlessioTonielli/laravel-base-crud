require('./bootstrap');

window.addEventListener('load', function() {
    const deleteBTn = document.querySelectorAll('delete');

    deleteBTn.addEventListener('submit', (event) => {
        
        if(!confirm("sei sicuro di voler cancellare l'elemenyo?")) {
            event.preventDefault();
        }

    })

})

