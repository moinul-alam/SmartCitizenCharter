function addRow() {
    // Add logic to dynamically add rows to the table
    var table = document.querySelector('table tbody');
    var newRow = table.insertRow(table.rows.length);
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);
    var cell7 = newRow.insertCell(6);

    // Add additional logic to customize cells, input elements, etc.
    cell1.innerHTML = '<input type="text" name="service_name[]">';
    cell2.innerHTML = '<input type="text" name="description[]">';
    cell3.innerHTML = '<input type="text" name="category[]">';
    cell4.innerHTML = '<input type="text" name="cost[]">';
    cell5.innerHTML = '<input type="text" name="duration[]">';
    cell6.innerHTML = '<input type="checkbox" name="available[]">';
    cell7.innerHTML = '<button type="button" onclick="removeRow(this)">Remove</button>';
}

function removeRow(button) {
    // Add logic to remove the corresponding row
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
}