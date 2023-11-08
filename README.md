# Design Patter - Builder
O código desse repositório mostra o aplicação do Design Pattern "Builder" através de um exemplo na linguagem PHP
no contexto da criação de personagens de RPG.

## Classe PersonagemRPG:

Esta classe representa um personagem de RPG e possui as propriedades nome, raça, classe e nível. Ela também tem um método __toString que retorna uma string com as caracteristicas criadas para o personagem
## Interface ConstrutorPersonagemRPG:

Esta é uma interface que define um contrato para classes que desejam atuar como construtores do personagem no exemplo. Ela possui um método construir que deve ser implementado pelas classes concretas.
## Classe ConstrutorPersonagemRPGConcreto:

Esta é uma classe concreta que implementa a interface ConstrutorPersonagemRPG. Ela fica responsável por construir objetos PersonagemRPG em sequencia. Os métodos setName, setRace, setClass e setLevel permitem configurar as propriedades do personagem em questão, após isso o método build cria o objeto final.
## Classe DiretorPersonagemRPG:

Esta classe atua como um diretor e coordena a construção do personagem usando um construtor. Ela recebe um construtor no construtor da classe.
O método criarPersonagem permite criar o personagem especificando os atributos desejados nesse caso nome, raça, classe e nível. Ele usa o construtor para configurar as propriedades do personagem e, em seguida, chama o método build para criar o objeto PersonagemRPG.
## Uso do Builder com um Diretor:

No final do código, como exemplo, é criada uma instância do ConstrutorPersonagemRPGConcreto como construtor e uma instancia do DiretorPersonagemRPG com o construtor.
Em seguida, o diretor é usado para criar um personagem chamado "Eldric", que é um humano e um mago de nível 5 assim, o diretor coordena a configuração desses atributos e cria o objeto PersonagemRPG.
Por fim, as informações do personagem são exibidos na tela usando a função nativa echo.
