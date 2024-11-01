import random
while True:
    palavras = ["Tudo o que um sonho precisa para ser realizado é alguém que acredite que ele possa ser realizado.\n"," A verdadeira viagem de descobrimento não consiste em procurar novas paisagens, e sim em ter novos olhos.\n","Se um homem não descobriu nada pelo que morreria, não está pronto para vida.\n","Perdoar é libertar o prisioneiro… e descobrir que o prisioneiro era você.\n","No fundo de um buraco ou de um poço, acontece descobrir-se as estrelas.\n"
]
    instrucao = input("O que você deseja para hoje?\n\n")
    palavra_aleatoria = random.choice(palavras)    
    print(palavra_aleatoria)
    if instrucao == "pare":
        break
 