const fs = require('fs');

const file1 = "page.txt";

const data = `
Employee Name: Pavithra
Employee ID: 001
`;

fs.writeFile(file1, data, (err) => {
    if (err) {
        console.log(err);
    } else {
        console.log("File created successfully");
    }

    fs.readFile(file1, 'utf8', (err, fileData) => {
        if (err) {
            console.log(err);
        } else {
            console.log("File Content:");
            console.log(fileData);
        }
    });
});