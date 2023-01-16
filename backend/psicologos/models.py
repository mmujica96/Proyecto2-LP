from django.db import models
from django.contrib.gis.db import *

# Create your models here.



class Usuario(models.Model):
    PSICOLOGO='PS'
    PACIENTE='PA'

    TIPO_DE_USUARIO=[(PSICOLOGO, 'psicologo'),(PACIENTE, 'paciente')]

    correo=models.EmailField()
    contrasenia=models.CharField(max_length=25)
    tipo_de_usuario=models.CharField(max_length=2, choices=TIPO_DE_USUARIO)


class Psicologo(models.Model):
    NORTE='N'
    SUR='S'
    CENTRO='C'
    SAMBORONDON='S'
    DAULE='D'
    SECTOR=[(NORTE,'Norte'),(SUR,'Sur'),(CENTRO,'Centro'),(SAMBORONDON,'Samborondon'),(DAULE,'Daule')]

    nombre= models.CharField(max_length=50)
    categoria=models.CharField(max_length=100)
    descripcion=models.TextField()
    sector=models.CharField(max_length=1, choices=SECTOR)

class Paciente(models.Model):
    nombre=models.CharField(max_length=50)
    descripcion=models.TextField()
    


