includeElement ('header.html', 'header');
includeElement ('navbar.html', 'navbar');
includeElement ('footer.html', 'footer');

function includeElement(url, targetElementID) {
    fetch(url)
        .then(response=>response.text())
        .then(data=> {
            const targetElement = document.getElementById(targetElementID);
            if(targetElement) {
                targetElement.innerHTML = data;
            }
        })
        .catch(error => console.error('Error loading component', error));
}