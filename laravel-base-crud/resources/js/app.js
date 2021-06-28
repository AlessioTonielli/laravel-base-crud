require('./bootstrap');

window.addEventListener('load', function() {
    const deleteBTn = document.querySelectorAll('.delete');
    console.log(deleteBTn)

    deleteBTn.forEach(btn => {


        btn.addEventListener('click', (event) => {
            
            if(!confirm("sei sicuro di voler cancellare l'elemento?")) {
                event.preventDefault();
            }
    
        })

    })

})

