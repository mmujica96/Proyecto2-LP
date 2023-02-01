# Generated by Django 4.1.6 on 2023-02-01 11:09

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('psicologos', '0004_recomendacion_recomendacion'),
    ]

    operations = [
        migrations.AddField(
            model_name='psicologo',
            name='imagen',
            field=models.CharField(max_length=540, null=True),
        ),
        migrations.AlterField(
            model_name='psicologo',
            name='sector',
            field=models.CharField(choices=[('N', 'Norte'), ('S', 'Sur'), ('C', 'Centro'), ('SA', 'Samborondon'), ('D', 'Daule')], max_length=2),
        ),
    ]