const form = document.querySelector("#register-form");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");
const nameInput = document.getElementById("name");
const cpfInput = document.getElementById("cpf");
const dateInput = document.getElementById("dob");
const alertDiv = document.getElementById("alert");

form.addEventListener("submit", function(event) {

    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();
    const name = nameInput.value.trim();
    const cpf = cpfInput.value.trim();
    const date = dateInput.value.trim();

    let camposFaltando = [];

    if (email === "") camposFaltando.push("E-mail");
    if (password === "") camposFaltando.push("Senha");
    if (name === "") camposFaltando.push("Nome");
    if (cpf === "") camposFaltando.push("CPF");
    if (date === "") camposFaltando.push("Data de Nascimento");

    if (camposFaltando.length > 0) {
        alertDiv.textContent = "É necessário digitar: " + camposFaltando.join(", ") + " para prosseguir";
        alertDiv.style.display = "block";
    } else {
        alertDiv.style.display = "none";
        form.submit(); // Envia o formulário ao backend
    }
});
