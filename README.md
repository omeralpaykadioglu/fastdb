# fastdb
PDO shorthand query method

Usage

// Select

$select = run('SELECT * FROM Table');

// Update & Insert

$update = run('UPDATE Table SET value = ? where id = ?',[$value,$id]);

// Get data

$data = run('SELECT * FROM Table')->fetch(PDO::FETCH_OBJ);

echo $data->id;
