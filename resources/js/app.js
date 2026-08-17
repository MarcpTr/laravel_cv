import './bootstrap';
const observerOptions = {
    threshold: 0.1,
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

document
    .querySelectorAll('.fade-in')
    .forEach((element) => observer.observe(element));


const contactForm = document.getElementById('contact-form');

if (contactForm) {
    const respuesta = document.getElementById('respuesta');
    const button = contactForm.querySelector('button');
    const contactUrl = contactForm.dataset.contactUrl;

    contactForm.addEventListener('submit', async (event) => {
        event.preventDefault();

        button.disabled = true;
        respuesta.textContent = 'Enviando...';

        try {
            const response = await fetch(contactUrl, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': contactForm.querySelector(
                        'input[name="_token"]'
                    ).value,
                    'Accept': 'application/json',
                },
                body: new FormData(contactForm),
            });

            const result = await response.json();

            if (response.ok) {
                respuesta.textContent = result.message;
                contactForm.reset();

                return;
            }

            if (response.status === 422) {
                const errors = Object.values(result.errors ?? {}).flat();

                respuesta.textContent =
                    errors[0] ?? 'Revisa los datos del formulario.';

                return;
            }

            if (response.status === 429) {
                respuesta.textContent =
                    result.message ??
                    'Has enviado demasiados mensajes. Inténtalo de nuevo en unos instantes.';

                return;
            }

            respuesta.textContent =
                result.message ??
                'No se pudo enviar el mensaje.';
        } catch (error) {
            console.error(error);

            respuesta.textContent =
                'No se ha podido enviar el mensaje. Comprueba tu conexión.';
        } finally {
            button.disabled = false;
        }
    });
}