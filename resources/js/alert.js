console.log("JS LOADED");

const deleteForm = document.querySelectorAll(".delete-form");

deleteForm.forEach((form) => {
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        const studentName = form.dataset.name;
        let hasConfirmed = "";
        if (studentName) {
            hasConfirmed = confirm(
                `Sei sicuro di voler eliminare lo studente ${studentName}?`
            );
        } else {
            hasConfirmed = confirm(
                `Sei sicuro di voler eliminare tutti gli studenti?`
            );
        }
        if (hasConfirmed) form.submit();
    });
});
