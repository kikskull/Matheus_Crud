$(document).ready(function () {
    $.getJSON('http://localhost/Thread/model/read.php', function (data) {
        var html = '';
        $.each(data, function (key, value) {
            html += "<tr>";
            html += "<th>" + value.id + "</th>";
            html += "<td>" + value.full_name + "</td>";
            html += "<td>" + value.email + "</td>";
            html += "<td>" + value.gender + "</td>";
            html += "<td>" + value.photo + "</td>";
            html += "<td>" + value.cpf + "</td>";
            html += "<td>" + value.phone + "</td>";
            html += "<td><a href='#'>Editar</a></td>";
            html += "<td><a href='#'>Excluir</a></td>";
            html += "</tr>";
        });
        $('#Tabela').append(html);
    });
})