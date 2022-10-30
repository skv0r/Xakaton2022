from cgitb import text
from curses.ascii import HT
from django.shortcuts import render
from django.http import HttpResponse


def index(request):
    return render(request, 'main/index.html')

def form(request):
    return HttpResponse('<h3>Form</h3>')





 



