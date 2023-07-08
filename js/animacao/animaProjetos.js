const myObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if(entry.isIntersecting){
            if (entry.target.classList.contains('hiddenn1')) {
                entry.target.classList.add('show1');
            } else if (entry.target.classList.contains('hiddenn2')) {
                entry.target.classList.add('show2');
            } else {
                entry.target.classList.remove('show1');
                entry.target.classList.remove('show2');
            }
        }else{
            entry.target.classList.remove('show1');
            entry.target.classList.remove('show2');
        }
    })
})

const elements = document.querySelectorAll('.hiddenn1, .hiddenn2');

elements.forEach((elements) => myObserver.observe(elements))