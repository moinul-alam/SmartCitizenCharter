function createInput(type, name, readOnly = true) {
    var input = document.createElement('input');
    input.type = type;
    input.name = name;
    input.readOnly = readOnly;
    return input;
}

function addRow(columnCount) {
    var tbody = document.getElementById('dynamicRow');
    var newRow = document.createElement('tr');

    for (var i = 0; i < columnCount; i++) {
        var cell = document.createElement('td');
        cell.appendChild(createInput('text', 'column' + (i + 1), false));
        newRow.appendChild(cell);
    }

    var saveButtonCell = document.createElement('td');
    saveButtonCell.appendChild(createInput('button', 'সংরক্ষণ করুন', false));
    saveButtonCell.firstChild.value = 'সংরক্ষণ করুন';
    saveButtonCell.firstChild.onclick = function() {
        saveRowData(this);
    };

    var editButtonCell = document.createElement('td');
    editButtonCell.appendChild(createInput('button', 'সম্পাদন করুন', true));
    editButtonCell.firstChild.value = 'সম্পাদন করুন';
    // Disable Edit button initially
    editButtonCell.firstChild.disabled = true;
    editButtonCell.firstChild.onclick = function() {
        editRowData(this);
    };

    var removeButtonCell = document.createElement('td');
    removeButtonCell.appendChild(createInput('button', 'মুছে ফেলুন', true));
    removeButtonCell.firstChild.value = 'মুছে ফেলুন';
    removeButtonCell.firstChild.onclick = function() {
        removeRowData(this);
    };

    newRow.appendChild(saveButtonCell);
    newRow.appendChild(editButtonCell);
    newRow.appendChild(removeButtonCell);
    tbody.appendChild(newRow);
}

function saveRowData(button) {
    var row = button.parentNode.parentNode;
    var inputs = row.querySelectorAll('input[type="text"]');
    inputs.forEach(function(input) {
        input.readOnly = true;
    });
    button.disabled = true;
    row.querySelector('[value="সম্পাদন করুন"]').disabled = false;
    row.querySelector('[value="মুছে ফেলুন"]').disabled = false;
}

function editRowData(button) {
    var row = button.parentNode.parentNode;
    var inputs = row.querySelectorAll('input[type="text"]');
    inputs.forEach(function(input) {
        input.readOnly = false;
    });
    button.disabled = true;
    row.querySelector('[value="সংরক্ষণ করুন"]').disabled = false;
}

function removeRowData(button) {
    var row = button.parentNode.parentNode;
    var confirmation = confirm('Are you sure you want to delete this row?');
    if (confirmation) {
        row.parentNode.removeChild(row);
    }
}
