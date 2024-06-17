from django.shortcuts import render

def ViewIndex(request):
    return render(request, 'index.html')

def ViewLogin(request):
    return render(request, 'login.html')

# Create your views here.
