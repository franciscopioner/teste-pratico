/*FORMULARIO CADASTRO SIMPLES*/
bootstrapValidate('#nome', 'required:Você deve preencher com seu nome');
bootstrapValidate('#email', 'email:Preencha com um email válido');
bootstrapValidate('#cpf', 'numeric:Você utilizar apenas números|max:11:Máximo de 11 números');
bootstrapValidate('#tel', 'numeric:Você utilizar apenas números');
/*FORMULARIO CADASTRO COMPLETO*/
bootstrapValidate('#dataNascimento', 'ISO8601:A data deve ser AAAA-MM-DD');
bootstrapValidate('#universadade', 'required:Você deve selecionar uma universidade');
bootstrapValidate('#curso', 'required:Você deve preencher este campo');
bootstrapValidate('#campus', 'required:Você deve preencher este campo');
bootstrapValidate('#turno', 'required:Você deve preencher este campo');
bootstrapValidate('#semestre', 'required:Você deve preencher este campo');
bootstrapValidate('#terminoDoCurso', 'ISO8601:A data deve ser AAAA-MM-DD');