setTimeout(() => {
    const box = document.getElementsByIds('disappear');
    //removes element from DOM
    box.style.display = 'none';

    //hides element (still takes up space on page)
    //box.style.visibility = 'hidden';

}, 1000); // time in miliseconds