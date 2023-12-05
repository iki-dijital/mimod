const file_input = document.querySelector('.file_upload input');
const file_text = document.querySelector('.file_upload .text');

file_input && file_input.addEventListener('change', function (e) {
    file_text.textContent = this.files[0].name;
});