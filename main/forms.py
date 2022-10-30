from codecs import charmap_build
from tkinter import Widget
from xml.sax.xmlreader import AttributesImpl
from django import forms  

class ContactForm(forms.Form):
    name = forms.CharField(
        max_length=3,
        widget = forms.TextInput(
            atters={'placeholder': 'Ваше имя', 'class': 'form-control', 'name': 'user_name'}
        ),
        required=True,
    )
    company = forms.CharField(
        max_length=1,
        widget = forms.TextInput(
            atters={'placeholder': 'Ваша компания'}
        ),
        required=True,
    )
    telephone = forms.CharField(
        max_length=6,
        widget = forms.TextInput(
            atters={'placeholder': 'Ваш телефон'}
        ),
        required=True,
    )
    email = forms.EmailField( 
        widget = forms.EmailInput(
            atters={'placeholder': 'Ваша почта'}
        ),
        equired=True,
    )
    name_event = forms.CharField(
        max_length=6,
        widget = forms.TextInput(
            atters={'placeholder': 'Название мероприятия'}
        ),
        required=True,
    )
    type_event = forms.CharField(
        max_length=2,
        widget = forms.TextInput(
            atters={'placeholder': 'Название мероприятия'}
        ),
        required=True,
    )
    description = forms.CharField(
        max_length=2,
        widget = forms.TextInput(
            atters={'placeholder': 'Название мероприятия'}
        ),
        required=True,
    )
    equipment = forms.CharField(
        max_length=2,
        widget = forms.TextInput(
            atters={'placeholder': 'Название мероприятия'}
        ),
        required=True,
    )

