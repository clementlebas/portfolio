const fs = require('fs');
let js = fs.readFileSync('main.js', 'utf8');

const uIdx = js.indexOf('setLangue:u');
console.log(js.substring(uIdx, uIdx + 800));
