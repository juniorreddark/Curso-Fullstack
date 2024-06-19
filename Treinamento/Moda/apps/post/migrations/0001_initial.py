# Generated by Django 5.0.6 on 2024-06-10 12:05

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Produto',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nome_produto', models.CharField(max_length=100)),
                ('valor_produto', models.DecimalField(decimal_places=2, max_digits=5)),
            ],
        ),
    ]