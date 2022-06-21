PHP + Mysql
php + pdo, 

Caso de Uso 1: Registrar Reclamação [Complaint Registration]
Caso de Uso 2: Consultar Reclamação [Search Complaint]
Caso de Uso 3: Atualizar Reclamação [Update Complaint]
Caso de Uso 4: Remover Reclamação [Delete Complaint]

Com a definição bem formada da hierarquia de Complaint, 
os métodos referentes aos casos de uso podem se valer do reuso por polimorfismo; 
por exemplo, ao invés de criar um método de inserção para cada tipo de Complaint, 
é possível ter apenas um com o tipo mais geral, que é Complaint.