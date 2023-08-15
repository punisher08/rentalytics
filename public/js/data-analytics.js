
    let yearElements = document.querySelectorAll('.year');
    console.log(yearElements)

    // Loop through each element and add an event listener
    yearElements.forEach(yearElement => {
        yearElement.addEventListener('click', event => {
           console.log(event.target);
        });
    });
