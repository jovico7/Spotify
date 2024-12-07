const divider = document.getElementById('divider');
const leftDiv = document.getElementById('leftDiv');
const rightDiv = document.getElementById('rightDiv');
const maxLeftWidth = 600; // Tamaño máximo para el div izquierdo
const minLeftWidth = 300; // Tamaño mínimo para el div izquierdo
const minRightWidth = 50; // Tamaño mínimo para el div derecho

// Creamos la variable isDragging
let isDragging = false;

// En caso de que el ratón esté clicado esta variable será true
divider.addEventListener('mousedown', (e) => {
    isDragging = true;
    document.body.style.cursor = 'grabbing';
});

document.addEventListener('mousemove', (e) => {
    if (isDragging) {
        const containerRect = divider.parentElement.getBoundingClientRect();
        const leftWidth = e.clientX - containerRect.left;
        const rightWidth = containerRect.width - leftWidth - divider.offsetWidth;

        // Limitar el tamaño mínimo del div izquierdo
        if (leftWidth < minLeftWidth) {
            leftDiv.style.width = minLeftWidth + 'px';
            rightDiv.style.width = (containerRect.width - minLeftWidth - divider.offsetWidth) + 'px';
        }
        // Limitar el tamaño máximo del div izquierdo
        else if (leftWidth > maxLeftWidth) {
            leftDiv.style.width = maxLeftWidth + 'px';
            rightDiv.style.width = (containerRect.width - maxLeftWidth - divider.offsetWidth) + 'px';
        }
        // Si está dentro del rango, ajusta los anchos
        else if (rightWidth > minRightWidth) {
            leftDiv.style.width = leftWidth + 'px';
            rightDiv.style.width = rightWidth + 'px';
        }
    }
});

document.addEventListener('mouseup', () => {
    isDragging = false;
    document.body.style.cursor = 'default';
});