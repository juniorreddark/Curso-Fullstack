while True:
    print('Qual seu gênero de filmes favorito?\n')
    print('Para filmes de ação digite: Ação\n')
    print('Para filmes de terror digite: Terror\n')
    print('Para filmes de comédia digite: Comédia\n')
    print('Para filmes de ficção científica digite: Ficção científica\n')
    print('Para filmes de romance digite: Romance\n')
    print('Para filmes de drama digite: Drama \n')
    print('Para filmes de suspense digite: Suspense \n')
    print('Para filmes  infantil digite: Infantil\n')
    print('Para filmes de aventura digite: Aventura \n')
    print('Para filmes de documentário ação: Documentário\n')
    print('Para filmes de musical ação : Musical \n')
    print("Para encerrar o programa digite: Sair.\n\n")
   
    opcao = input('Digite o gênero de filme que voçê deseja:')

    if opcao == ("Ação"):
        print("Recomendaçâo para filmes de Açâo: land of bad, the Beekeeper:rede de vinganças, Gladiador 2, Adâo negro, Os Mercenarios 4.\n\n")
    elif opcao == ("Terror"):
        print("Recomendaçâo para filmes de terror: O mal que nos habita, Pacto com o demônio, Sorria 2, Possessâo, A hora do pesadelo.\n\n")
    
    elif opcao == ("Comédia"):
        print("Recomendaçâo para filmes de comedia: The americam society of musical negrôes, The fall guy, Anyone but you, Minha mâe è uma peça, Zoolander.\n\n")
    
    elif opcao == ("Ficção científica"):
        print("Recomendaçâo para filmes de ficcâo cientifica: Infinit, Spacemam, Esterminador do futuro, Os caça fantasmas.\n\n")
    
    elif opcao == ("Romance"):d
    print("Recomendação para filmes e Romance: Bela e a Fera, A noiva-cadáver, Titanic, A culpa é das estrelas, Continência do amor.\n\n")
    
    elif opcao == ("Drama"):
    print("Recomendação para filmes de Drama: Destemida, Fome de sucesso, Arremesso alto, Contra o gelo, O soldado que não existiu.\n\n")
    
    elif opcao == ("Suspense"):
        print("Recomendação para filmes de Suspense: ilha do medo, A ligaçâo, O enfermeiro da noite, Rastro de um sequestro, Fuja! \n\n")
        print("Recomendo assistir na : Netflix,Globo Play,DarKflix\n\n")
    elif opcao == ("Infantil"):
        print("Recomendaçâo para filmes infantis: Kung fu panda 4, Garfild fora de casa, Sonic 3 o filme, Shek, Toy Story.")
        print("Recomendo assistir na : Netflix,Amazon Prime video,Disney+\n\n")

    elif opcao == ("Musical"):
        print("Recomendação para filmes Musical: Bob Marley one love, Música faca the music, Nasce uma estrela, High school musical,Chicago.\n\n")
        print("Recomendo assistir na : Netflix,Globo play,Telecine\n\n")

    elif opcao == ("Aventura"):
        print("Recomendação para filmes de Aventura Planeta dos macacos:O reinado, kung fu panda 4, Uma prova de coragem , Guerra Civil, Wakanda forever.\n\n")

    elif opcao == ("Documentário"):
        print("Recomendação para filmes de Documentário: Depois da morte, Linha de frente, Sociedade do medo, Oppenheimer, Vidas descaetáveis.\n\n")
    
    elif opcao == ("Sair"):
        print("Programa encerrado.")

        break
    else:
        print(' Erro! Opção invalida, tente novamente.')
    

