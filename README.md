# Usando "principio da substituição de Liskov" do conceito Solid
Case clássico de polígonos para demonstrar como a tipagem forte de comportamento pode ser ferida mesmo com a abstração correta da orientação de objetos. Neste utilizo PHP puro via autoloader do Composer.
Somente para fins de estudos e amostragem de boas práticas começanddo com uma abstração basica, mostrando que o principio LSP é ferido quando ao extender da classe "pai"(Retangulo.php) a classe "filha"(Quadrado.php) não consegue fazer o calculo de um retângulo. No decorrer aplico o principio SOLID de substituição de Liskov para sanar esse problema.

## Conceitos SOLID
1. ~Reposnsabilidade única~
2. ~Funcionalides abertas para extensões e fechadas para modificação~
3. ~Principio de Linskov da SUBSTITUIÇÃO (onde uma classe filha deve ser capaz de substituir a classe pai perfeitamente)~
4. Segregação de interface (não deve forçar a implementar metodos que não vai usar)
5. Inversão de dependencia (classe de alto nivel não deve depender de uma classe de baixo nivel)
