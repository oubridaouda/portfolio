import * as parser from '@babel/parser';
import generate from '@babel/generator';

// Code source en ECMAScript
const sourceCode = `
const message = "Hello, world!";
console.log(message);
`;

// Analyse du code source pour créer un AST
const ast = parser.parse(sourceCode, {
    sourceType: 'module',
    plugins: ['jsx'], // Vous pouvez ajouter d'autres plugins nécessaires
});

// Convertit l'AST en code JavaScript
const { code } = generate(ast, {}, sourceCode);

console.log(code);
