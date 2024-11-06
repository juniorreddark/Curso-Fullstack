while True:
   palavra_secreta = ("Amanda")  
   palpite = None

   palpite = (input("Digite uma palavra:"))

   if palpite == palavra_secreta:
        print("Parabéns! você acertou!")
        break
   else:
     if palpite == palavra_secreta: 
        print("tente novamente")
     else: print(" não foi possivel")