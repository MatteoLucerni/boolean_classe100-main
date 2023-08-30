console.log("JS LOADED");

const deleteForm = document.querySelectorAll(".delete-form");

deleteForm.forEach((form) => {
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        const studentName = form.dataset.name;
        const hasConfirmed = confirm(
            `Sei sicuro di voler eliminare lo studente ${studentName}?`
        );
        if (hasConfirmed) form.submit();
    });
});
