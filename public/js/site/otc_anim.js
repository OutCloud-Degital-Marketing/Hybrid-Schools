$(window).on("load", function() {
    let animObserver = new IntersectionObserver(function(entries, observer) {
        delay = 0;
        entries.forEach(entry => {
            // entry.target.classList.toggle("show", entry.isIntersecting)
            if (entry.isIntersecting) {
                
                setTimeout(function () {
                    // add the class that triggers the animation
                    entry.target.classList.add('shown');

                    // remove the tag
                    // entry.target.classList.remove('show');
                }, delay);

                // increase the delay to allow a cascading effect for the elements
                delay += 100; // in milliseconds
            
                observer.unobserve(entry.target)
            }
        });
    }, {
        threshold: .125
    })

    let animTargets = document.querySelectorAll('.animation')
    animTargets.forEach(target => {
        animObserver.observe(target)
    });
});